<?php include "layout.php"; ?>


<?php define("PAGE_TITLE", "About us");?>
<?php // "opening" HTML for the template ?>
<?php template_header();?>
<!DOCTYPE html>
<html>

    <body>
        <form action="process_form.php" method="get">
            <label for="thang">Tháng: </label>
            <select name="thang" id="thang">
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="Jun">Jun</option>
                <option value="Jul">Jul</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
            </select>
            <br><br>
        
            <label for="thongke">Thống kê doanh thu:</label>
            <select name="thongke" id="thongke">
                <option value="min">Doanh thu thấp nhất</option>
                <option value="max">Doanh thu cao nhất</option> 
            </select>
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>



<?php // "closing" HTML for the template ?>
<?php template_footer();?>