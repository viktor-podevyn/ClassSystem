
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
                </tr>
                </thead>
                <tbody>
                <tr class="clickable" data-href="#">
                    <td>
                        <?php echo $teacher['name'];?>
                    </td>
                    <td>
                        <?php echo $teacher['classID']; ?>
                    </td>
                    <td>
                    <td>
                        <div class="table-data">
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $teacher['teacherID'];?>"/>
                                <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                            </form>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <form method="post" id="edit-user">

                <input type="hidden" name="id" value="<?php echo $teacher['teacherID']?>" />

                <label for="firstname">First name:</label>
                <input type="text" name="firstname" id="firstname" required value="<?php echo htmlspecialchars($teacher['firstName']) ?>"/>

                <label for="lastname">Last name:</label>
                <input type="text" name="lastname" id="lastname" required value="<?php echo htmlspecialchars($teacher['lastName']) ?>"/>

                <input type="submit" class="btn btn-primary" type="submit" name="edit" value="<?php echo $teacher['teacherID'];?>>
            </form>
        </div>
    </div>

</section>



