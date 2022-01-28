// todo Javascript Content

//todo return all data in Employees.json
async function callDataEmploee() {
    let result = []
    try {
        result = await $.ajax({
            url: ".././resources/employees.json",
            success: function (data) {
                $dataEmployee = data;
            }
        })
        return result;
    } catch (error) {
        console.error("Don't load the Data");
    }
};