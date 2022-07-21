
let user_result = localStorage.getItem("result");
        let src;
        console.log(user_result);

        switch(user_result) {
            case '0':
                src = '../results/result_fire.php';
                break;
            case '1':
                src = '../results/result_ice.php';
                break;
            case '2':
                src = '../results/result_water.php';
                break;
            case '3':
                src = '../results/result_wind.php';
                break;
            case '4':
                src = '../results/result_thunder.php';
                break;
            case '5':
                src = '../results/result_rock.php';
                break;
            case '6':
                src = '../results/result_wood.php';
                break;
            case '7':
                src = '../results/result_mist.php';
                break;
            case '8':
                src = '../results/result_light.php';
                break;
            case '9':
                src = '../results/result_dark.php';
                break;
        }

setTimeout(function(){
    window.location.href = src;
}, 500);
