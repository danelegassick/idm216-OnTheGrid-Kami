<?php if (!isset($proteins)) {
    echo '$proteins variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($protein = mysqli_fetch_array($proteins)) {
        if ($protein['name']!='None') {
        echo "
            <div id='ck-button'>
                <label>
                    <input type='checkbox' value='{$protein['id']}'>
                    <span>
                        <img src='$site_url/dist/images/protein-{$protein['name']}.svg' alt='{$protein['name']}'>
                        <p>{$protein['name']}</p>
                    </span>
                </label>
            </div>
            ";
    }
}
?>