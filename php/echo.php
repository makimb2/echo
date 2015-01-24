<?php
	function first()
    {
    $numargs = func_num_args();    
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
    echo "$arg_list[$i]" . "<br />\n";

    }
        }

    first();
    first('bla');
    first('foo','bar','baz');
    first('happy','days','are','on','their','way');
		
?>