<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

?>


#submit {
all: unset;
background-color: black;
color: white;
padding: .50em;
cursor: pointer;
}



#submit:hover {
background-color: white;
color: black;
}

.project-summary {
width: 100%;
}


.project-summary thead tr {
    display:flex;
    justify-content: space-evenly;
width: fit-content;
}

.project-summary th {
font-weight: bold;
font-size: 1rem;
margin: 0 4em;

}