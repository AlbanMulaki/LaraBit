/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var userRoles = {
    el: '#larabit-app',
    methods: {
        'updatePermissionRole': function (roleId, permissionId, status, currentCheckbox) {
//    currentCheckbox.iCheck('uncheck');
            $.ajax({
                url: "/cp/users/roles/roles/change-permission/" + roleId + "/" + permissionId + "/" + status,
                context: document.body,
                method: "POST",
                statusCode: {
                    403: function () {
                        currentCheckbox.iCheck('uncheck');
                        new PNotify({
                            title: Lang.get('common::validation.permission_denied'),
                            text: Lang.get('common::validation.permission_denied'),
                            type: 'error',
                            styling: 'bootstrap3',
                            icon: 'fa fa-times fa-lg',
                            animate: {
                                animate: true,
                                in_class: 'bounce',
                                out_class: 'zoomOutRight'
                            }
                        });
                    },
                    500: function () {
                        currentCheckbox.iCheck('uncheck');
                        new PNotify({
                            title: Lang.get('common::validation.generic_error'),
                            text: Lang.get('common::validation.generic_error'),
                            type: 'error',
                            styling: 'bootstrap3',
                            icon: 'fa fa-times fa-lg',
                            animate: {
                                animate: true,
                                in_class: 'bounce',
                                out_class: 'zoomOutRight'
                            }
                        });
                    }
                }
            }).success(function (response) {
                if (response.action == "create") {
                    new PNotify({
                        title: Lang.get('users::validation.success_attach_permission'),
                        text: Lang.get('users::validation.success_attach_permission_desc'),
                        type: 'success',
                        styling: 'bootstrap3',
                        icon: 'fa fa-check fa-lg',
                        animate: {
                            animate: true,
                            in_class: 'bounce',
                            out_class: 'zoomOutRight'
                        }
                    });
                } else if (response.action == "delete") {
                    new PNotify({
                        title: Lang.get('users::validation.success_revoked_permission_desc'),
                        text: Lang.get('users::validation.success_revoked_permission_desc'),
                        type: 'warning',
                        styling: 'bootstrap3',
                        icon: 'fa fa-info-circle fa-lg',
                        animate: {
                            animate: true,
                            in_class: 'bounce',
                            out_class: 'zoomOutRight'
                        }
                    });
                }
            });
        }
    }};
/**
 * load module in vueJs
 * @type type
 */

var vue = new Vue({
    mixins: [userRoles]
});
// Create permission roles
$('input').on('ifChecked', function () {
    var roleId = $(this).attr('data-roleId');
    var permissionId = $(this).attr('data-permissionId');
    vue.updatePermissionRole(roleId, permissionId, "create", $(this));
});
// Delete permission roles
$('input').on('ifUnchecked', function (event) {
    console.log(event);
    var roleId = $(this).attr('data-roleId');
    var permissionId = $(this).attr('data-permissionId');
    vue.updatePermissionRole(roleId, permissionId, "delete", $(this));
});