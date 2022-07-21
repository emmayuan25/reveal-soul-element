
$("#show-result").on("click", function(event){
    event.preventDefault();
    localStorage.clear();
    var username = document.getElementById("name-input").value;
    console.log(username);
    if(username.length > 0){
        var result = calculateScore(scores);
        console.log(result);
        localStorage.setItem("result", result);
        localStorage.setItem("name", username);
        document.getElementById("userresult-form").value = result;

        document.getElementById("form-username").submit();
    } else {
       document.getElementById("name-q-text").innerHTML = "Please type in your name"; 
    }
});