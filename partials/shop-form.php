<form class="row row-cols-auto g-3 align-items-center">
        <div class="col">
            <div class="input-group" data="i">
                <div class="input-group-text">Name</div>
                <input class="form-control" name="name" value="<?php se($name); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control bg-info" name="col" value="<?php se($col); ?>" data="took">
                    <option value="cost">Cost</option>
                    <option value="stock">Stock</option>
                    <option value="name">Name</option>
                    <option value="created">Created</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option class="bg-white" value="asc">Up</option>
                    <option class="bg-white" value="desc">Down</option>
                </select>
                <script data="this">
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                    if (document.forms[0].order.value === "asc") {
                        document.forms[0].order.className = "form-control bg-success";
                    } else {
                        document.forms[0].order.className = "form-control bg-danger";
                    }
                </script>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>