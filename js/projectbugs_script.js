// Add Record
function addProjectbugs() {
    // get values
    var github_link = $("#github_link").val();
    var assignet_to = $("#assignet_to").val();
    var project_name = $("#project_name").val();
    //var status = $("#status").val();
    //value = $("#txt_name").attr('value');
    var status= document.getElementById('status').value; 
    var description = $("#description").val();

    // Add record
    $.post("ajax/addProjectbugs.php", {
        github_link: github_link,
        status: status,
        assignet_to: assignet_to,
        project_name: project_name,
        description: description
    }, function (data, status) {
        // close the popup
        $("#add_new_projectbugs_modal").modal("hide");

        // read again
        readProjectbugs();

        // clear fields from the popup
        $("#github_link").val("");
        $("#assignet_to").val("");
        $("#project_name").val("");
        $("#status").val("");
        $("#description").val("");
    });
}

function readProjectbugs() {
    var project_id = $("#project_id").val();

    $.get("ajax/readProjectbugs.php", {
        project_id : project_id
    }, function (data, status) {
        $(".projectbugs_content").html(data);

    });
}

/*function readProjectbugs() {
    $.get("ajax/readProjectbugs.php", {}, function (data, status) {
        $(".projectbugs_content").html(data);
    });
}*/

function DeleteProjectbugs(id) {
    var conf = confirm("Are you sure, do you really want to delete Project bug?");
    if (conf == true) {
        $.post("ajax/deleteProjectbugs.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readProjectbugs();
            }
        );  
    }
}

function GetProjectbugsDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_projectbugs_id").val(id);
    $.post("ajax/readProjectbugsDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var projectbugs = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_github_link").val(projectbugs.github_link);
            $("#update_start_time").val(projectbugs.start_time);
            $("#update_end_time").val(projectbugs.end_time);
            $("#update_status").val(projectbugs.status);
            $("#update_assignet_to").val(projectbugs.assignet_to);
            $("#update_project_name").val(projectbugs.project_name);
            $("#update_description").val(projectbugs.description);

        }
    );
    // Open modal popup
    $("#update_projectbugs_modal").modal("show");
}

function UpdateProjectbugsDetails() {
    // get values
       var github_link = $("#update_github_link").val();
       var end_time = $("#update_end_time").val();
       var status = $("#update_status").val();
       var assignet_to = $("#update_assignet_to").val();
       var description = $("#update_description").val();

    // get hidden field value
    var id = $("#hidden_projectbugs_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProjectbugsDetails.php", {
        id: id,
        github_link: github_link,
        end_time: end_time,
        status: status,
        assignet_to: assignet_to,
        description: description
        },
        function (data, status) {
            // hide modal popup
            $("#update_projectbugs_modal").modal("hide");
            // reload Users by using readRecords();
            readProjectbugs();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readProjectbugs(); // calling function
});