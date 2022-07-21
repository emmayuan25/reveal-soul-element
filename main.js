let scores = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

// update helper functions
function updateFire(pre,post){
    var temp = scores[0] + 1;
    scores[0] = temp;
    hidehide(pre,post);
}
function updateIce(pre,post){
    var temp = scores[1] + 1;
    scores[1] = temp;
    hidehide(pre,post);
}
function updateWater(pre,post){
    var temp = scores[2] + 1;
    scores[2] = temp;
    hidehide(pre,post);
}
function updateWind(pre,post){
    var temp = scores[3] + 1;
    scores[3] = temp;
    hidehide(pre,post);
}
function updateThunder(pre,post){
    var temp = scores[4] + 1;
    scores[4] = temp;
    hidehide(pre,post);
}
function updateRock(pre,post){
    var temp = scores[5] + 1;
    scores[5] = temp;
    hidehide(pre,post);
}
function updateWood(pre,post){
    var temp = scores[6] + 1;
    scores[6] = temp;
    hidehide(pre,post);
}
function updateMist(pre,post){
    var temp = scores[7] + 1;
    scores[7] = temp;
    hidehide(pre,post);
}
function updateLight(pre,post){
    var temp = scores[8] + 1;
    scores[8] = temp;
    hidehide(pre,post);
}
function updateDark(pre,post){
    var temp = scores[9] + 1;
    scores[9] = temp;
    hidehide(pre,post);
}

function hidehide(pre,post){
    console.log(pre);
    console.log(post);
    console.log(scores);
    document.getElementById(pre).classList.toggle("hide");
    document.getElementById(post).classList.toggle("hide");
}

function calculateScore(){
    let max = scores[0];
    let location = [];
    let result = 0;
    for(var i=1; i<scores.length; i++){
        if(scores[i]>max){
            max = scores[i];
            location = [];
            location.push(i);
        }
        else if(scores[i] == max){
            location.push(i);
        }
        console.log(max);
    }
    if(location.length == 1){
        result = location[0];
    }
    if(location.length > 1){
        let random = Math.floor(Math.random() * (location.length - 1));
        result = location[random];
        console.log(random);
    }
    
    console.log(scores);
    console.log(location);
    console.log(result);
    return result;
}





