<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Window</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container my-3">
        <h1 class="text-center">Add user, update or delete</h1>

        <button id="addUserButton" class="btn btn-dark">Add user</button>
        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" autocomplete="off" required>
                    
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" autocomplete="off" required>
                    
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" id="mobile" name="mobile" autocomplete="off" required>
                    
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" autocomplete="off" required>
                    
                    <button type="submit" name="submit">Close</button>
                    <button type="submit" name="submit" onclick="adduser()">Save changes</button>
                </form>
            </div>
        </div>
        <div id="displayDataTable"></div>   
        
        <!-- update user modal -->
        <div class="modalUpdate">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <h5 class="modal-title">Update user</h5>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" autocomplete="off" required>
                        
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" autocomplete="off" required>
                        
                        <label for="mobile">Mobile Number:</label>
                        <input type="text" id="mobile" name="mobile" autocomplete="off" required>
                        
                        <label for="password">Password:</label>
                        <input type="text" id="password" name="password" autocomplete="off" required>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <input type="hidden" id="hiddenData">
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="index.js"></script>
</body>
</html>