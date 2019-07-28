function calendar(){
    var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
    var d=new Date();
    setText('calendar-day', day[d.getDay()]);
    setText('calendar-date', d.getDate());
    setText('calendar-month-year', month[d.getMonth()]+' '+(1900+d.getYear()));
};

//this function will set the text value of
 tags
function setText(id, val){
    if(val < 10){
        val = '0' + val;    //add leading 0 if val < 10
    }
    document.getElementById(id).innerHTML = val;
};

//call calendar() when page load
window.onload = calendar;
function loadYears()
{
    // whichever date range makes the most sense
    var startYear = 1900;
    var endYear = 2022;

    for(var i = startYear; i <= endYear; i++)
    {
        var doc = document.createElement("div");
        doc.innerHTML = i;
        doc.classList.add("dropdown-item");

        doc.onclick = (function(){
            var selectedYear = i;
            return function(){
                year = selectedYear;
                document.getElementById("curYear").innerHTML = year;
                loadCalendarDays();
                return year;
            }
        })();

        document.getElementById("years").appendChild(doc);
    }
}
function daysInMonth(month, year)
{
    var d = new Date(year, month+1, 0);
    return d.getDate();
}

function loadCalendarDays()
{
    document.getElementById("calendarDays").innerHTML = "";

    var tmpDate = new Date(year, month, 0);
    var num = daysInMonth(month, year);
    var dayofweek = tmpDate.getDay();       // find where to start calendar day of week
    // create day prefixes
    for(var i = 0; i <= dayofweek; i++)
    {
        var d = document.createElement("div");
        d.classList.add("day");
        d.classList.add("blank");
        document.getElementById("calendarDays").appendChild(d);
    }
    for(var i = 0; i < num; i++)
            {
                var tmp = i + 1;
                var d = document.createElement("div");
                d.id = "calendarday_" + i;
                d.className = "day";
                d.innerHTML = tmp;
                document.getElementById("calendarDays").appendChild(d);
            }

            var clear = document.createElement("div");
            clear.className = "clear";
            document.getElementById("calendarDays").appendChild(clear);
        }
