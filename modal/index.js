// /////// modal window
// const modal = document.getElementById("myModal");
// const addUserButton = document.getElementById("addUserButton");
// const closeButton = modal.querySelector(".close");

// addUserButton.addEventListener("click", () => modal.style.display = "block");
// closeButton.addEventListener("click", () => modal.style.display = "none");
// window.addEventListener("click", (event) => event.target === modal ? modal.style.display = "none" : null);


const modal = document.getElementById("myModal");
const addUserButton = document.getElementById("addUserButton");
const closeButton = modal.querySelector(".close");

addUserButton.addEventListener("click", () => {
  modal.style.display = "block";
  setTimeout(() => {
    modal.style.opacity = "1";
    modal.style.transition = "opacity 0.6s ease-in-out";
  }, 50); 
});

closeButton.addEventListener("click", () => {
  modal.style.opacity = "0"; 
  setTimeout(() => {
    modal.style.display = "none";
    modal.style.transition = "none";
  }, 1000); 
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.opacity = "0";
    setTimeout(() => {
      modal.style.display = "none";
      modal.style.transition = "none"; 
    }, 1000); 
  }
});



$(document).ready(function() {
    displayTable();
});

function displayTable() {
    $.ajax({
        url: 'display.php',
        type: 'POST',
        data: {
            displayDataTable: true
        },
        success: function(data) {
            $('#displayDataTable').html(data);
        }
    });
}

//////////// add user
function adduser(){
    let name = $('#name').val();
    let email = $('#email').val();
    let mobile = $('#mobile').val();
    let password = $('#password').val();

    $.ajax({
        url : 'insert.php',
        type : 'POST',
        data : {
            name : name,
            email : email,
            mobile : mobile,
            password : password,
        },
        success : function (data, status) { 
            // console.log(status);
            displayData();
        }
    });
}


///////// delete user
function deleteUser(deleteId) {
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            deleteId: deleteId,
        },
        success: (data, status) => {
            displayData();
        }
    });
}




//////////// update user
function updateUser(updateUserId){
  $('#hiddenData').val(updateUserId);

  $.post('update.php',{'updateUserId' : updateUserId}, function (data, status){
    let updateUserId = JSON.parse(data);
    $('#name').val(updateUserId.name);
    $('#email').val(updateUserId.email);
    $('#mobile').val(updateUserId.mobile);
    $('#password').val(updateUserId.password);
  })

  $('#modalUpdate').modal("show");
}