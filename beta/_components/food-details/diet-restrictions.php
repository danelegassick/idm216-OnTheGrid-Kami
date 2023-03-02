<?php if (!isset($restrictions)) {
    echo '$restrictions variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($restriction = mysqli_fetch_array($restrictions)) {
        if ($restriction['name']!='None') {
        echo "
            <div id='ck-button'>
                <label>
                    <input type='checkbox' value='{$restriction['id']}'><span>{$restriction['name']}</span>
                </label>
            </div>
            ";
    }
}
?>