<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h3 class="modal-title" id="modal-register-label">Add New Member</h3>
                                    <h4>Fill in the form below to add new member:</h4>
                                </div>
                                
                                <div class="modal-body">
                                    
                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">First name</label>
                                            <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Last name</label>
                                            <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                                            <textarea name="form-about-yourself" placeholder="About yourself..." 
                                                        class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                        </div>
                                        <button type="submit" class="btn">Add</button>
                                    </form>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
</body>
</html>