<?php

class ProfilesController extends BaseController 
{  
    protected $module = 'profile';
    protected $moduleId ;

    public function __construct()
    {
        $this->moduleId = Module::where('name','=',$this->module)->first()->id;
    }

    // entra desde el route inicial
    public function getIndex()
    {       	

        if(!parent::validarPermisos($this->moduleId, 'read'))
            {
                return Redirect::back()->with('warning','Acceso denegado a esta seccion');
            }


        $data['profiles']   = Profile::all();
        $data['module']     = $this->module;

        return View::make('stock.profile.index')->with($data);       
    }

    // muestra el formulario para agregar
    public function getNew()
    {    

        if(!parent::validarPermisos($this->moduleId, 'add'))
            {
                return Redirect::back()->with('warning','Acceso denegado a esta seccion');
            }

        $action             = 'create';
        $data['action']     = $action;
        $data['module']     = $this->module;
        $data['modules']    = Module::All();

        return View::make('stock.profile.form')->with($data);
    }

    // procesa el formulario para agregar
    public function postNew()
    {      
       	$input  = Input::all();
        $profile = new Profile();        

        $profile->profile = $input['profile'];

        if($profile->save())
        {
            $modules = Module::All();

            foreach($modules as $module)
            {
                $module_id = $module->id;
                $permission = new Permission();
                $permission->module_id = $module_id;
                $permission->profile_id = $profile->id;
                $permission->read =  (isset($input['read'][$module_id])) ? 1 : 0;
                $permission->edit = (isset($input['edit'][$module_id])) ? 1 : 0;
                $permission->delete = (isset($input['delete'][$module_id])) ? 1 : 0;
                $permission->add = (isset($input['add'][$module_id])) ? 1 : 0;
                $permission->save();
            }
            return Redirect::to($this->module)->with('success','Registro creado Correctamente');

        }else{
            return Redirect::to($this->module)->with('danger','Error');
        }        
    }

    // muestra el formulario con los datos de edicion
    public function getEdit($id = null)
    {       
        if(!parent::validarPermisos($this->moduleId, 'edit'))
            {
                return Redirect::back()->with('warning','Acceso denegado a esta seccion');
            }

        $action     = 'edit';
        $id         = Crypt::decrypt($id);
        $profile    = Profile::find($id);

        $data['model']       = $profile;
        $data['action']      = $action;
        $data['module']      = $this->module;
        $data['modules']     = Module::All();
        $data['permissions'] = Permission::getPermissionsFromProfileId($id);

        return View::make('stock.profile.form')->with($data);
    }

    // procesa el formulario de edicion
    public function postEdit($id = null)
    {
        
        $input   = Input::all();        
        $profile = Profile::find($input['id']); 

        $profile->profile = $input['profile'];

        if($profile->save())
        {
            $modules = Module::All();

            foreach($modules as $module)
            {
                $permission = Permission::whereRaw('module_id = ? and profile_id = ?', array($module->id, $profile->id))->first();

                //User::whereRaw('age > ? and votes = 100', array(25))->get();9

                $permission->read   = (isset($input['read'][$module->id])) ? 1 : 0;
                $permission->edit   = (isset($input['edit'][$module->id])) ? 1 : 0;
                $permission->delete = (isset($input['delete'][$module->id])) ? 1 : 0;
                $permission->add    = (isset($input['add'][$module->id])) ? 1 : 0;
                $permission->save();
            }
            return Redirect::to($this->module)->with('success','Registro modificado Correctamente');

        }else{

            return Redirect::to($this->module)->with('danger','Error');
        }   
    }

    // procesa el delete
    public function getDel($id = null)
    {
        if(!parent::validarPermisos($this->moduleId, 'delete'))
            {
                return Redirect::back()->with('warning','Acceso denegado a esta seccion');
            }


        $profile = Profile::find(Crypt::decrypt($id));
        $profile->delete();

        return Redirect::to($this->module)->with('success','Registro modificado Correctamente');
    }

}