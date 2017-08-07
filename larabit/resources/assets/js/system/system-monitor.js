/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var systemMonitor = {
    el: '#larabit-app',
    methods: {
        'healthServer': function (server_id, health_id) {
            $.ajax({
                url: "/cp/system/monitor/attach-health-server",
                context: document.body,
                dataType: 'json',
                data: {
                    'server_id': server_id,
                    'health_id': health_id
                },
                method: "POST",
                statusCode: {
                    403: function () {
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
                    422: function () {
                        new PNotify({
                            title: Lang.get('common::validation.select_option'),
                            text: Lang.get('common::validation.select_option'),
                            type: 'warning',
                            styling: 'bootstrap3',
                            icon: 'fa fa-times fa-lg',
                            animate: {
                                animate: true,
                                in_class: 'bounce',
                                out_class: 'zoomOutRight'
                            }
                        });
                    },
                    500: function (data) {
                        var response = $.parseJSON(data.responseText);
                        new PNotify({
                            title: Lang.get('common::validation.generic_error'),
                            text: response.message[0],
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
                        title: Lang.get('common::validation.successfully'),
                        text: response.message[0],
                        type: 'success',
                        styling: 'bootstrap3',
                        icon: 'fa fa-check fa-lg',
                        animate: {
                            animate: true,
                            in_class: 'bounce',
                            out_class: 'zoomOutRight'
                        }
                    });
                    window.setTimeout(function(){location.reload()},1000);
                }
            });
        }
    }};
/**
 * load module in vueJs
 * @type type
 */

var vue = new Vue({
    mixins: [systemMonitor]
});


// Attach health check to server
$('.add-health-server').on('click', function () {
    var server = $(".add-health-server").data("server");
    var health = $("select[name=health_check").val();
    vue.healthServer(server, health);
});