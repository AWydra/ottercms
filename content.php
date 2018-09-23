<form action="otter.php" method="post">
    <div class="form-group">
        <label for="heading">Heading</label>
        <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading; ?></textarea>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content; ?></textarea>
        <small class="form-text text-muted">HTML is allowed.</small>
    </div>
    <div class="row">
        <div class="form-group col-md-6 mb-0">
            <label for="btn">Button</label>
            <textarea class="form-control" id="btn" name="btn" rows="1" required><? echo $btn; ?></textarea>
        </div>
        <div class="form-group col-md-6 mb-0">
            <label for="heading">Final date</label>
            <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date; ?></textarea>
            <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
        </div>
        <div class="form-group col-12">
            <label for="btnlink">Button link</label>
            <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required><? echo $btnlink; ?></textarea>
        </div>
        <fieldset class="form-group col-md-6">
            <legend>Promoboxes are:</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="enable" value="block" checked>
                    Enabled
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="disable" value="none">
                    Disabled
                </label>
            </div>
        </fieldset>
        <fieldset class="form-group col-md-6">
            <legend>Date counter is:</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" checked>
                    Enabled
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none">
                    Disabled
                </label>
            </div>
        </fieldset>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="logout.php" style="float: right;">Log out</a>