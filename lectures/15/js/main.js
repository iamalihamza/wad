var info = {
    title1:"Ali Hamza",
    balance1:5000,
    currency1:"PKRS",
    iban1:"PKN12345"}

display_info();
function display_info()
{
    document.getElementById("title").innerText = info.title1;
    document.getElementById("balance").innerText = info.balance1;
    document.getElementById("currency").innerText = info.currency1;
    document.getElementById("IBAN").innerText = info.iban1;

}

function deposit(e,v)
{
    if(e.key=="Enter") {
        info.balance1 = (info.balance1 + parseInt(v));
        display_info();
    }
}

function withdraw(e,v)
{
    if(e.key=="Enter") {
        if(v > info.balance1)
        {

            document.getElementById("withdraw-msg").innerText ="You do not have sufficient balance";
        }
        else {
            info.balance1 = (info.balance1 - parseInt(v));
            display_info();
        }
    }
}
