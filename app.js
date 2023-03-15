$(document).ready(function () {
  $("#add").click(function () {
    var htmlString =
      "<tr class='main-form'><td> <label>Add New Employee</label><br><label>Name</label><input required type='text' name='name[]' id='name' class='form-control'>";
    htmlString +=
      "<label>Email</label><input type='email' required name='email[]' id='email' class='form-control'>";
    htmlString +=
      "<label>Mobile</label><input type='number' name='mobile[]' id='mobile' class='form-control'>";
    htmlString +=
      "<label>Gender</label><select class='form-control' aria-label='Default select example' id='gender' name='gender[]'><option value='male'>Male</option> <option value='Female'>Female</option> </select>";
    htmlString +=
      "<label>Date of Birth</label><input type='date' id='date' name='dateofb[]' class='form-control'>";
    htmlString +=
      "<label>Resignation</label><input type='text' id='regignation' name='Regignition[]' class='form-control'>";
    htmlString +=
      "<label>salary</label><input type='number' id='salary' name='Salary[]' class='form-control'>";
    htmlString +=
      "<label>Status</label><select class='form-control' aria-label='Default select example' id='Status' name='Status[]'><option value='1'>Active</option> <option value='0'>Inactive</option> </select>";
    htmlString +=
      "<br><button type='button' class='btn btn-danger' id='remove-btn'><i class='fa fa-minus'></i> Remove </button>";
    htmlString += "</td></tr>";
    $("#emptd").append(htmlString);
  });

  $(document).on("click", "#remove-btn", function () {
    $(this).closest(".main-form").remove();
  });
});

function update(data) {
  console.log(data);
}
