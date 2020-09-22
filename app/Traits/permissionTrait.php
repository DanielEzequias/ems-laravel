<?php
namespace App\Traits;

trait permissionTrait{
    public function hasPermission(){


        //department
        if(!isset(auth()->user()->role->permission['name']['department']
        ['can-add']) && \Route::is('department.create')){
            return abort(401);
        }
        if(!isset(auth()->user()->role->permission['name']['department']
        ['can-list']) && \Route::is('department.index')){
            return abort(401);
        }


        //role
        if(!isset(auth()->user()->role->permission['name']['role']
        ['can-add']) && \Route::is('role.create')){
            return abort(401);
        }
        if(!isset(auth()->user()->role->permission['name']['role']
        ['can-list']) && \Route::is('role.index')){
            return abort(401);
        }

        //user
        if(!isset(auth()->user()->role->permission['name']['user']
        ['can-add']) && \Route::is('user.create')){
            return abort(401);
        }
        if(!isset(auth()->user()->role->permission['name']['user']
        ['can-list']) && \Route::is('user.index')){
            return abort(401);
        }


        //role
        if(!isset(auth()->user()->role->permission['name']['permission']
        ['can-add']) && \Route::is('permission.create')){
            return abort(401);
        }
        if(!isset(auth()->user()->role->permission['name']['permission']
        ['can-list']) && \Route::is('permission.index')){
            return abort(401);
        }

        //Leave
        if(!isset(auth()->user()->role->permission['name']['leave']
        ['can-list']) && \Route::is('leave.index')){
            return abort(401);
        }

         //Notice
         if(!isset(auth()->user()->role->permission['name']['notice']
         ['can-add']) && \Route::is('notice.create')){
             return abort(401);
         }
         if(!isset(auth()->user()->role->permission['name']['notice']
         ['can-list']) && \Route::is('notice.index')){
             return abort(401);
         }
    }
}