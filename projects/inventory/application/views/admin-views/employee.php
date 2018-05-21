<div class="container">
    <div id="mainContent">
        <article>
            <section>
                <label>Employee List</label>
                <br>
                <div class="alert alert-success" style="display: none;"></div>
                <button id="addEmp" class="btn btn-success"> Add</button>
                <table class="table">
                    <thead> 
                        
                        <tr>
                            <th>ID</th>
                            <th>Sex</th>
                            <th>Designation</th>
                            <th>Supervisor</th>
                        </tr>
                    </thead>
                    <tbody id="showdata">
                        
                    </tbody>
                </table>
            </section>
        </article>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
            <form id="myForm" action="" method="post" class="form-horizontal">
                <input type="hidden" name="txtId" value="0">
                <div class="form-group">
                    <label for="name" class="label-control col-md-4">Employee id</label>
                    <div class="col-md-8">
                        <input type="text" name="txtEmployeeID" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="name" class="label-control col-md-4">Sex</label>
                    <div class="col-md-8">
                        <input type="text" name="txtEmployeeSex" value="Male" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="label-control col-md-4">Designation</label>
                    <div class="col-md-8">
                        <input type="text" name="txtEmployeeDesignation" value="Sales" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="address" class="label-control col-md-4">Supervised By</label>
                    <div class="col-md-8">
                        <input type="text" name="txtEmployeeSupervisor" value="13" class="form-control">
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
            Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(function(){
        showAllEmployee();  

        //Add New
        $('#addEmp').click(function(){
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Add New Employee');
            $('#myForm').attr('action', '<?php echo base_url() ?>Employee/addEmployee');
            $('input').val('');
        });

        //Save 
        $('#btnSave').click(function(){
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            //validate form
            var empID = $('input[name=txtEmployeeID]');
            var empSex = $('input[name=txtEmployeeSex]');
            var empDesignation = $('input[name=txtEmployeeDesignation]');
            var empSupervisor = $('input[name=txtEmployeeSupervisor]');
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: true,
                    success: function(response){
                        var result = JSON.parse(response);
                        if(result.success){
                            console.log(result);
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if(result.type=='add'){
                                var type = 'added'
                            }else if(result.type=='update'){
                                var type ="updated"
                            }
                            $('.alert-success').html('Employee '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllEmployee();


                        }else{
                            alert('Error');              
                        }
                    },
                    error: function(){
                        alert('Could not add data');
                    }
                });
            
        });

        //delete- 
        $('#showdata').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>Employee/deleteEmployee',
                    data:{id:id},
                    success: function(response){
                        var result = JSON.parse(response);
                        if(result.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Employee deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllEmployee(); 
                        }else{
                            alert('Error');  
                        }
                    },
                    error: function(){
                        alert('Error deleting');
                    }
                });
            });
        });

        //edit
        $('#showdata').on('click', '.item-edit', function(){
            var id = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Employee');
            $('#myForm').attr('action', '<?php echo base_url() ?>employee/updateEmployee');
            $.ajax({
                method: 'get',
                type: 'ajax',
                url: '<?php echo base_url() ?>employee/editEmployee',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtId]').val(data.empid);
                    $('input[name=txtEmployeeID]').val(data.empid);
                    $('input[name=txtEmployeeSex]').val(data.empsex);
                    $('input[name=txtEmployeeDesignation]').val(data.empdesignation);
                    $('input[name=txtEmployeeSupervisor]').val(data.supervisedby);
                },
                error: function(){
                    alert('Culd not edit');
                }
            });
        })

        function showAllEmployee(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Employee/showAllEmployee',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                                    '<td>'+data[i].empid+'</td>'+
                                    '<td>'+data[i].empsex+'</td>'+
                                    '<td>'+data[i].empdesignation+'</td>'+
                                    '<td>'+data[i].supervisedby+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].empid+'">Edit</a>'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].empid+'">Delete</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
        }
    });
</script>
