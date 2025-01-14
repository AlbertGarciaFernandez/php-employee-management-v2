window.addEventListener("DOMContentLoaded", async () => {
    let employees = await getEmployees();
    loadEmployeeTable(employees);
  });
  
  async function getEmployees() {
    const response = await fetch("dashboard/getEmployees");
    const data = await response.json();
    console.log(data)
    return data;
  }


  function loadEmployeeTable(employees) {
    $("#jsGrid").jsGrid({
      width: "100%",
      height: "700px", //800max
  
      inserting: true,
      sorting: true,
      paging: true,
  
      data: employees,
  
      rowDoubleClick: function (args) {
        const id = args["item"].id;
        window.location.assign(`http://localhost/php-employee-management-v2/employeeForm/showEmployee/${id}`);
      },
  
      fields: [
        {
          name: "name",
          type: "text",
          width: 150,
          title: "Name",
          validate: "required",
        },
        { name: "email", type: "text", width: 200, title: "Email" },
        { name: "streetAdress", type: "text", title: "Street No." },
        { name: "city", type: "text", title: "City" },
        { name: "state", type: "text", width: 50, title: "State" },
        { name: "postalCode", type: "number", title: "Postal Code" },
        { name: "phoneNumber", type: "number", title: "Phone Number" },
        {
          type: "control",
          editButton: false,
          delOptions: { url: "/controller/deleteRecordAction" },
        },
      ],
      controller: {
        deleteItem: function name(item) {
          return $.ajax({
            type: "DELETE",
            url: "http://localhost/php-employee-management-v2/employeeForm/deleteEmployee",
            data: JSON.stringify(item),
          });
        },
  
        insertItem:  function name(item) {
          return $.ajax({
            type: "POST",
            url: "http://localhost/php-employee-management-v2/employeeForm/addGridEmployee",
            data: JSON.stringify(item),
            success: async function(data)          
            {   
              let employees = await getEmployees();
              loadEmployeeTable(employees);
            },
          });
        },
      },
    });
  }
  