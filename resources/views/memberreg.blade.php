<html>
    <head>
        <title>Student registrationform</title>
        
    </head>

    <body>
        <div class="container">
            
            <form action="{{route('store')}}" method="post">
                @csrf
                <div class="form-group">
                    <div>
                        <h2 >student details</h2>
                    </div>

                </div> 
                <hr/>
                <div class="row">
                    <div>
                        <label>Studentname</label>
                        <input type="text" name="studname" class="formcontrol" id="studname" placeholder="studentname">

                    </div>
                    <div>
                        <label>course</label>
                        <input type="text" name="course" class="formcontrol" id="course" placeholder="course">
                        
                    </div>
                    <div>
                        <label>fee</label>
                        <input type="text" name="fee" class="formcontrol" id="fee" placeholder="fee">
                        
                    </div>
                    <div>
                        <button>submit</button>
                    </div>

                </div>

            </form>
        </div>
    </body>
</html>