
function readBug() {
    var project_id = $("#project_id").val();
    var bug_id = $("#bug_id").val();

    $.get("ajax/readBug.php", {
        project_id : project_id,
        bug_id : bug_id
    }, function (data, status) {
        $(".bug_content").html(data);

    });
}

function DeleteBug(id) {
    var conf = confirm("Are you sure, do you really want to delete Project bug?");
    if (conf == true) {
        $.post("ajax/deleteBug.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readBug();
            }
        );  
    }
}

function GetBugDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_bug_id").val(id);
    $.post("ajax/readBugDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var bug = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_github_link").val(bug.github_link);
            $("#update_start_time").val(bug.start_time);
            $("#update_end_time").val(bug.end_time);
            $("#update_status").val(bug.status);
            $("#update_assignet_to").val(bug.assignet_to);
            $("#update_project_name").val(bug.project_name);
            $("#update_description").val(bug.description);

        }
    );
    // Open modal popup
    $("#update_bug_modal").modal("show");
}

function UpdateBugDetails() {
    // get values
       var github_link = $("#update_github_link").val();
       var end_time = $("#update_end_time").val();
       var status = $("#update_status").val();
       var assignet_to = $("#update_assignet_to").val();
       var description = $("#update_description").val();

    // get hidden field value
    var id = $("#hidden_bug_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateBugDetails.php", {
        id: id,
        github_link: github_link,
        end_time: end_time,
        status: status,
        assignet_to: assignet_to,
        description: description
        },
        function (data, status) {
            // hide modal popup
            $("#update_bug_modal").modal("hide");
            // reload Users by using readRecords();
            readBug();
        }
    );
}

function GetDescriptionDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_bug_id").val(id);
    //$("#update_description").val(description);

    $.post("ajax/readDescriptionDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var bug = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_description").val(bug.description);

        }
    );
    // Open modal popup
    $("#update_bug_description_modal").modal("show");
}

function EditBugDescription() {
    // get values
    var description = $("#update_description").val();

    // get hidden field value
    var id = $("#hidden_bug_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/editBugDescription.php", {
        id: id,
        description: description
        },
        function (data, status) {
            // hide modal popup
            $("#update_bug_description_modal").modal("hide");
            // reload Users by using readRecords();
            readBug();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readBug(); // calling function
});