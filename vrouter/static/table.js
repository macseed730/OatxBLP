function viewTrafficModal(data) {
    const unescapedData = unescape(data);
    const parsedData = JSON.parse(unescapedData);

    delete parsedData.logInformation
    const formattedData = JSON.stringify(parsedData, undefined, 2);


    $('#infoText').text(formattedData);
    $('#popupModal').css('display', 'block');
}

const getDiffFromDates = (date1, date2) => {

    const parsedDate1 = new Date(date1)
    const parsedDate2 = new Date(date2)
    const diff = Math.abs(parsedDate2 - parsedDate1);
    const calculatedDiff = Math.floor(diff / 1000);

    let formattedTime;
    if (calculatedDiff > 60) {
        formattedTime = `${Math.floor(calculatedDiff / 60)} minuites`
    } else {
        formattedTime = `${calculatedDiff} seconds`
    }

     return formattedTime;
}

function openLogModal(data) {
    const unescapedData = unescape(data);
    const parsedData = JSON.parse(unescapedData);
    let narrativeMsg = 'FULL VICTIM JOURNEY...\n'

    narrativeMsg += `Open the Link at ${new Date(parsedData.dateTime)}\n`;
    for(let logObj of parsedData.logInformation) {
        const timingDiff = getDiffFromDates(logObj.dateTime, parsedData.dateTime)
        narrativeMsg += `\t Entered the below input after ${timingDiff}.\n`
        narrativeMsg += `\t\t ${logObj.key} => ${logObj.value}\n`
    }


    $('#infoText').text(narrativeMsg);
    $('#popupModal').css('display', 'block');
}



$(window).click(function(event) {
    if ($(event.target).is('#popupModal')) {
        $('#popupModal').css('display', 'none');
    }
});

$('.close').click(function() {
    $('#popupModal').css('display', 'none');

});
