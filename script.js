function updateCourses() {
    var programme = document.getElementById("programme").value;
    var courseSelect = document.getElementById("course");
    courseSelect.options.length = 0; // clear previous options
  
    if (programme === "cs") {
      var option1 = document.createElement("option");
      option1.text = "Design";
      courseSelect.add(option1);
  
      var option2 = document.createElement("option");
      option2.text = "Network";
      courseSelect.add(option2);
    } else if (programme === "eng") {
      var option1 = document.createElement("option");
      option1.text = "Grammar";
      courseSelect.add(option1);
  
      var option2 = document.createElement("option");
      option2.text = "Composition";
      courseSelect.add(option2);
    }
  }
  
  function updateCourseCode() {
    var course = document.getElementById("course").value;
    var courseCode = document.getElementById("coursecode");
  
    if (course === "Design") {
      courseCode.value = "CS101";
    } else if (course === "Network") {
      courseCode.value = "CS102";
    } else if (course === "Grammar") {
      courseCode.value = "ENG101";
    } else if (course === "Composition") {
      courseCode.value = "ENG102";
    } else {
      courseCode.value = "";
    }
  }
  