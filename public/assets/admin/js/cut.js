var $material_table = $('#material_table');
var $color_table = $('#color_table');
var $thickness_table = $('#thickness_table');
$(function() {
    $material_table.bootstrapTable();
    $color_table.bootstrapTable();
    $thickness_table.bootstrapTable();
    $.fn.editable.defaults.emptytext = '-';
});
function material_buttons () {
    return {
        btnDel: {
            text: 'Remove',
            icon: 'fa-minus',
            event: function () {
                var ids = $.map($material_table.bootstrapTable('getSelections'), function (row) {
                    return row.id
                });
                if(ids.length==0)
                    return;
                $.ajax({
                    url: $material_table.data('url'),
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "ids":ids,
                        "_method": 'DELETE'
                    },
                    success: function ()
                    {
                        $material_table.bootstrapTable('refresh');
                    }
                });
            },
            attributes: {
                title: 'Search all users which has logged in the last week'
            }
        },
        btnAdd: {
            text: 'Add new row',
            icon: 'fa-plus',
            event: function () {
                $.ajax({
                    url: $material_table.data('url'),
                    type: 'PUT',
                    datatype:"JSON",
                    data: {
                        bend_type:1,
                        material:'-',
                        gravity:0
                    } ,
                    success: function (response) {
                        $material_table.bootstrapTable('refresh');
                       // You will get response from your PHP page (what you echo or print)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });
            },
            attributes: {
                title: 'Add a new row to the table'
            }
        }
    }
}
function color_buttons () {
    return {
        btnDel: {
            text: 'Remove',
            icon: 'fa-minus',
            event: function () {
                var ids = $.map($color_table.bootstrapTable('getSelections'), function (row) {
                    return row.id
                });
                if(ids.length==0)
                    return;
                $.ajax({
                    url: $color_table.data('url'),
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "ids":ids,
                        "_method": 'DELETE'
                    },
                    success: function ()
                    {
                        $color_table.bootstrapTable('refresh');
                    }
                });
            },
            attributes: {
                title: 'Search all users which has logged in the last week'
            }
        },
        btnAdd: {
            text: 'Add new row',
            icon: 'fa-plus',
            event: function () {
                $.ajax({
                    url: $color_table.data('url'),
                    type: 'PUT',
                    datatype:"JSON",
                    data: {
                        material_id:0,
                        color:'',
                        finished_surface:'',
                        design:'',
                        designR:''
                    } ,
                    success: function (response) {
                        $color_table.bootstrapTable('refresh');
                       // You will get response from your PHP page (what you echo or print)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });
            },
            attributes: {
                title: 'Add a new row to the table'
            }
        }
    }
}
function thickness_buttons () {
    return {
        btnDel: {
            text: 'Remove',
            icon: 'fa-minus',
            event: function () {
                var ids = $.map($thickness_table.bootstrapTable('getSelections'), function (row) {
                    return row.id
                });
                if(ids.length==0)
                    return;
                $.ajax({
                    url: $thickness_table.data('url'),
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "ids":ids,
                        "_method": 'DELETE'
                    },
                    success: function ()
                    {
                        $thickness_table.bootstrapTable('refresh');
                    }
                });
            },
            attributes: {
                title: 'Search all users which has logged in the last week'
            }
        },
        btnAdd: {
            text: 'Add new row',
            icon: 'fa-plus',
            event: function () {
                $.ajax({
                    url: $thickness_table.data('url'),
                    type: 'PUT',
                    datatype:"JSON",
                    data: {
                        material_id:0,
                        color:'',
                        finished_surface:'',
                        design:'',
                        designR:''
                    } ,
                    success: function (response) {
                        $thickness_table.bootstrapTable('refresh');
                       // You will get response from your PHP page (what you echo or print)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });
            },
            attributes: {
                title: 'Add a new row to the table'
            }
        }
    }
}
