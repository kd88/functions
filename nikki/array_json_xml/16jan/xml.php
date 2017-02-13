<?php
$data = 
"<personal>
<school>h.s.m public school </school>
<student>childrens</student>

<ashwiniinfo><name>ashwini</name></ashwiniinfo>
<ashwiniinfo><age>22</age></ashwiniinfo>
<ashwiniinfo><subject>maths</subject></ashwiniinfo>
<ashwiniinfo><marks>55</marks></ashwiniinfo>

<manishainfo><name>manisha</name></manishainfo>
<manishainfo><age>23</age></manishainfo>
<manishainfo><subject>maths</subject></manishainfo>
<manishainfo><marks>55</marks></manishainfo>

<kunalinfo><name>kunal</name></kunalinfo>
<kunalinfo><age>25</age></kunalinfo>
<kunalinfo><subject>maths</subject></kunalinfo>
<kunalinfo><marks>55</marks></kunalinfo>

<shraddhainfo><name>shraddha</name></shraddhainfo>
<shraddhainfo><age>21</age></shraddhainfo>
<shraddhainfo><subject>maths</subject></shraddhainfo>
<shraddhainfo><marks>54</marks></shraddhainfo>



</personal>";

$abc= simplexml_load_string($data);
$data= json_encode($abc);
$result= json_decode($data);

echo "<pre>";
print_r($result);
?>