
setCookies = (cName, cValue, expDays) => {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
}

getCookies = (cName) => {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split(";");
    let value;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) 
            value = val.substring(name.length, val.length);
    });
    return value;
}

document.querySelector("#cookies-btn").addEventListener("click", () => {
    document.querySelector("#cookies").style.display = "none";
    setCookies("cookie", true, 30); // they will expire in 30 days after the user has clicked on it
});


cookieMessage = () => {
    if(!getCookies("cookie"))
    document.querySelector("#cookies").style.display = "block";
}//check for cookie//

window.addEventListener("load", cookieMessage);