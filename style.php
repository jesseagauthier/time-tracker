<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

?>

body {
background-color: rgb(237, 233, 233);
}

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
border-spacing: 30px;
}


.project-summary thead tr {
width: fit-content;
}

.project-summary th {
font-weight: bold;
font-size: 1rem;
margin: 0 4em;
}

.project-summary th,tr {
border: 3px solid black;
}

form {
display: flex;
flex-direction: column;
justify-content: center;
align-content: center;
}


form label,input {
width 50%;
}