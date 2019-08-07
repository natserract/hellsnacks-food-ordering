 // This is pagination 
 $(function() {
     $("div.holder").jPages({
         containerID: "itemContainer",
         previous: "←",
         next: "→",
         perPage: 9,
         midRange: 5
     });
 });