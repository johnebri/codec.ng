

// SIDEBAR TOGGLE
function openNav() {
 document.querySelector(".mobile__sidebar-bg").style.width = "295px";
 document.querySelector(".mobile__sidebar").style.width = "100%";
 document.querySelector(".mobile__sidebar-bg").style.transform = "translate(0)";
}

function closeNav(e) {

  document.querySelector(".mobile__sidebar-bg").style.width = "0";
  document.querySelector(".mobile__sidebar").style.width = "0";
  document.querySelector(".mobile__sidebar-bg").style.transform = "translate(-500px)";
 
}

/********************************************************************* */

function showPage(e) {
 let target = e.target;
 //get element
 const show = document.querySelectorAll('.show');
 let borderClass = document.querySelectorAll('.active-list');

 //loop through element and remove classes
 borderClass.forEach((elem) => {
  elem.classList.remove('active-list');
 });


 if (show) {
  //loop through element and remove classes
  show.forEach((elem) => {
   elem.classList.remove('show');
  });

 }

 if (target.classList.contains('show-perf')) {
  //get dom elements
  let overview = document.querySelector('.overview');
  let performance = document.querySelector('.performance');
  let showBorder = document.querySelector('.showBorder');

  //add classes to element
  overview.classList.add('show');
  performance.classList.add('show');
  showBorder.classList.add('active-list');
 }

 if (target.classList.contains('show-courses')) {
  //get dom elements
  let courses = document.querySelector('.courses');
  let courseBorder = document.querySelector('.courseBorder');

  //add classes to element
  courses.classList.add('show');
  courseBorder.classList.add('active-list');
 }

 if (target.classList.contains('show-comms')) {
  //get dom elements
  let communicate = document.querySelector('.communicate');
  let comms = document.querySelector('.communication');
  let commsBorder = document.querySelector('.commsBorder');

  //add classes to element
  comms.classList.add('show');
  communicate.classList.add('show');
  commsBorder.classList.add('active-list');
 }

 if (target.classList.contains('show-tools')) {
  //get dom elements
  let tools = document.querySelector('.tools');
  let toolsBorder = document.querySelector('.toolsBorder');

  //add classes to element
  tools.classList.add('show');
  toolsBorder.classList.add('active-list');
 }

 if (target.classList.contains('show-resource')) {
  //get dom elements
  let resource = document.querySelector('.resource');
  let resourceBorder = document.querySelector('.resourceBorder');

  //add classes to element
  resource.classList.add('show');
  resourceBorder.classList.add('active-list');
 }

}

function listener() {
 //get dom element
 const sidebar = document.querySelector('.sidebar');
 const mobileSidebar = document.querySelector('.mobile__sidebar-list');
 const open = document.querySelector('.mobile-nav__toggle');
 const close = document.querySelector(".mobile__sidebar");

 //add event to element
 open.addEventListener('click', openNav);
 close.addEventListener('click', closeNav);
 sidebar.addEventListener('click', showPage);
 mobileSidebar.addEventListener('click', function(e){
  showPage(e);
  closeNav();
 });
}

//call function
listener();