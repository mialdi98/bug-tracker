// Add Record
function addProject() {
    // get values
    var project_name = $("#project_name").val();
    var assignet_to = $("#assignet_to").val();

    // Add record
    $.post("ajax/addProject.php", {
        project_name: project_name,
        assignet_to: assignet_to
    }, function (data, status) {
        // close the popup
        $("#add_new_project_modal").modal("hide");

        // read again
        readProject();

        // clear fields from the popup
         $("#project_name").val("");
        $("#assignet_to").val("");
    });
}

function readProject() {
    $.get("ajax/readProject.php", {}, function (data, status) {
        $(".project_content").html(data);
    });
}

function DeleteProject(id) {
    var conf = confirm("Are you sure, do you really want to delete Project?");
    if (conf == true) {
        $.post("ajax/deleteProject.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readProject();
            }
        );
    }
}

function GetProjectDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_project_id").val(id);
    $.post("ajax/readProjectDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var project = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_project_name").val(project.project_name);
            $("#update_assignet_to").val(project.assignet_to);
        }
    );
    // Open modal popup
    $("#update_project_modal").modal("show");
}

function UpdateProjectDetails() {
    // get values
    var project_name = $("#update_project_name").val();
    var assignet_to = $("#update_assignet_to").val();

    // get hidden field value
    var id = $("#hidden_project_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProjectDetails.php", {
        id: id,
        project_name: project_name,
        assignet_to: assignet_to
        },
        function (data, status) {
            // hide modal popup
            $("#update_project_modal").modal("hide");
            // reload Users by using readRecords();
            readProject();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readProject(); // calling function
});