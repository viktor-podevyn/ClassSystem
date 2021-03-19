
<section class="general-section justify-content-center">

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
            <table>
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Teacher ID</th>
                    <th data-sortable="true" scope="col" data-field="Class">First Name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Last Name</th>
                    <th data-sortable="true" scope="col" data-field="Class">E-mail Address</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class</th>
                </tr>
                </thead>
                <tr>
                    <td><?php echo $teacher['teacherID']; ?></td>
                    <td><?php echo $teacher['firstName']; ?></td>
                    <td><?php echo $teacher['lastName']; ?></td>
                    <td><?php echo $teacher['email']; ?></td>
                    <td><?php echo $teacher['className'];?></td>
                </tr>
            </table>
        </div>
    </div>
</section>



