
<section class="general-section justify-content-center">

    <!--<h4>Welcome to the general  page </h4>-->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="search-wrap">
                <div class="container">
                    <h4>Look for a specific student via this search bar</h4>
                    <form action="" method="onsubmit" class="search-form">
                        <button type="submit" value="search" id="searchButton">search</button>
                        <input type="text" class="search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center padding">
        <div class="table-responsive">
            <table class="table table-hover" data-toggle="table">
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class</th>
                    <th data-sortable="true" scope="col" data-field="Class">teacher</th>
                </tr>
                </thead>
                <tbody>
                <tr class="clickable" data-href="#">
                    <td>
                        <?php echo $student['name'];?>
                    </td>
                    <td>
                        <?php echo $student['className']; ?>
                    </td>
                    <td>
                        <?php echo $teacher['teacherID'];?>
                    </td>
                </tr>
                </tbody>
            </table>

            <form method="post" id="create-user">

                <input type="hidden" name="id" value="<?php echo $student['studentID']?>" />

                <label for="firstname">First name:</label>
                <input type="text" name="firstname" id="firstname" required value="<?php echo htmlspecialchars($student['firstName']) ?>"/>

                <label for="lastname">Last name:</label>
                <input type="text" name="lastname" id="lastname" required value="<?php echo htmlspecialchars($student['lastName']) ?>"/>

                <form class="create-form" method="post">
                    <input type="hidden" name="id" value=""/>
                    <a href="#" class="btn btn-primary" type="submit" name="create" value="<?php echo $student['studentID'];?>">Create
                        new</a>
                </form>
            </form>
        </div>
    </div>

</section>



