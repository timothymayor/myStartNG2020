var myName = "Timothy Mayor";
var myCourses = ["nodejs", "php", "csharp", "go", "java", "flutter", "javascript", "htmlcss", "uiux", "python"];
console.log(myName);
console.log(myCourses);


console.log("Displaying all Even numbers from 1 - 200 (inclusive), for number of courses");
for (myCourses = 1; myCourses <= 200; myCourses++) {
  if (myCourses % 2 === 0){
    console.log(myCourses);
  }
}

