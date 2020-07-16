let main = {
    openAddForm: () => {
        $("#employeeForm")[0].reset();
        $('#modalLabel').html('Add Form');
    },

    openEditForm: (employee) => {
        let emp = JSON.parse(employee);
        $('#modalLabel').html('Edit Form');
        $('#id').val(emp.id);
        $('#firstName').val(emp.firstName);
        $('#lastName').val(emp.lastName);
        $('#middleName').val(emp.middleName);
        $('#nickName').val(emp.nickName);
        $('#dept').val(emp.dept);
        $('#position').val(emp.position);
        $('#birthDate').val(emp.birthDate);
        $('#hiredDate').val(emp.hiredDate);
        $('#email').val(emp.email);
        let vals = 'resigned';
        $('#status').val(emp.status).change();
    },
}
