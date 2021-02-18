function openServices() {
            document.getElementsByClassName("v-nav-services")[0].style.left = "0px";
        }

        function closeServices() {
            document.getElementsByClassName("v-nav-services")[0].style.left = "-15rem";
        }

        function openNav() {
            document.getElementsByClassName("v-nav-primary")[0].style.left = "0px";
        }

        function closeNav() {
            document.getElementsByClassName("v-nav-primary")[0].style.left = "-15rem";
        }

function ifNav() {
	if(document.getElementsByClassName("v-nav-services")[0].style.left=="0px") {
		closeServices();
	} else if(document.getElementsByClassName("v-nav-primary")[0].style.left=="0px") {
		closeNav();
	}
}
