<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Calendar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="header-out">
        <img class="BulletinLogo" src="https://i.imgur.com/aNeZokY.jpeg">
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/home.php">Home</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentCalendar.php">Student Calendar</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentAssignmentPlanner.php">Student Planner</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentRunOrganizations.php">Student-Run Organizations</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentGradeCalculator.php">Student Grade Calculator</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/account1.php">Account</a>
    </nav>
    <main>
    <div id="Title">
        <p style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; top: 50%; font-size: 30px; margin-left: 35px"> Bulletin's Student Calendar</p>
    </div>
    <h2 style = "font-size: 18px; font-family: 'Open Sans', sans-serif; color:white; background: black; border-radius: 16px; text-align: center; padding: 40px; padding-right: 20px; width: 800px; margin-left: 340px;"> Welcome to Bulletin's Student Calendar! Our 
        calendar is very easy to use. You can view previous months by
        clicking the previous month button and you can view future months by clicking the next month button. The current 
        date is highlighted with a black box. The grey boxes with no dated numbers indicate the previous months days. Additionally, you can 
        add notes/events detailing whatever you'd like. To do this click on a date of your choice. You will be prompted with a 
        form that requires information on the note/event. When done click the add note/event button. The note/event should show up in your 
        calendar on that date. Then refresh your screen. Unfortunately at this time, you can only add 1 note/event per date, but in future updates you will 
        be able to add more. You can also delete the notes/event by clicking on the date with the note/event. Make sure 
        to refresh the page so the deletion can update. If the delete note/event button is not showing up you must refresh the page.</h2>
        <div id="studentCalendar" style="margin-left: 105px; width: 1085px; height: 1070px; padding-right: 140px; padding-left: 90px;">
            <div id="headerButtons">
                <button id="previousMonthButton" class="previousMonth" style="margin-left: 270px">Previous Month</button>
                <p id="month" style="margin-left: 0px"></p>
                <button id="nextMonthButton" class="nextMonth" style="margin-right: 200px">Next Month</button>
            </div>
            <div id="daysOfWeek" style="width: 108.5%; margin-left: -20px;">
                <div style="margin-left: 40px;">Sunday</div>
                <div style="margin-left: 18px;">Monday</div>
                <div style="margin-left: 23px;">Tuesday</div>
                <div style="margin-left: 20px;">Wednsday</div>
                <div style="margin-left: 24px;">Thursday</div>
                <div style="margin-left: 22px;">Friday</div>
                <div style="margin-left: 18px;">Saturday</div>
            </div>
            <div id="dayBoxes"></div>
            <dialog id="addStudentUserEvent" style="background: black">
            <form method="addEvent" action="" style="background-color: black; color: white; font-family: 'Open Sans', sans-serif; margin-left: 10px; margin-top: -600px; bottom: 20px; padding-bottom: 160px; width: 800px; height: 250px; text-align: center; border-radius: 100px; border: 2px solid white;">
                <br>
                <br>
                <br>
                <h1> Add Student Note/Event</h1>
                <label>Note/Event Description</label><br>
                <input size="35" style="height: 30px; border-radius: 20px; text-align: center; " type="text" id="noteEventDescription" placeholder="Enter in Description of Note/Event"required>
                <p id = "createdNoteEventText"></p>
                <input style="cursor: pointer; font-family: 'Open Sans', sans-serif; background: black; color: white; border-radius: 4px; height: 35px; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px;" id="addNoteEventButton" type="submit" value="Add Note/Event">
                <br>
                <br>
                <input style="cursor: pointer; font-family: 'Open Sans', sans-serif; background: black; color: white; border-radius: 4px; height: 35px; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px;" id="deleteNoteEventButton" type="button" value="Delete Note/Event">
                <br>
                <br>
                <input style="cursor: pointer; font-family: 'Open Sans', sans-serif; background: black; color: white; border-radius: 4px; height: 35px; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px;" id="closeNoteEventButton" type="button" value="Close Note/Event">
                <br>
                <br>
            </form>
        </dialog>
        </div>
      <script>

      //Function that adds newly created note/event onto the calendar for that date.
      function addNewNoteOrEvent()
      {
          //If statment that has an array that pushes the newly created data into an array to be printed on the exact date the user clicked
          if (noteEventDescription.value)
          {
            noteEvents.push({
                calDate: calendarDateClicked, description: noteEventDescription.value,
            });
            localStorage.setItem('calendarNoteEvent', JSON.stringify(noteEvents));
            closeModal();
          }
      }


      //Function that deletes created event from the calendar
      function deleteEvent()
      {
          noteEvents = noteEvents.filter(e => e.calDate !== calendarDateClicked);
          localStorage.setItem('calendarNoteEvent', JSON.stringify(noteEvents));
          closeModal();
      }

          //Grab Local Variables
          const dayBoxes = document.getElementById('dayBoxes');
          const daysOfWeek = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'];

          const newNoteEvent = document.getElementById('addStudentUserEvent');

          let noteEvents = localStorage.getItem('calendarNoteEvent') ? JSON.parse(localStorage.getItem('calendarNoteEvent')) : [];
          let monthNumber = 0;
          const deleteNoteEvent = document.getElementById('deleteNoteEventButton');
          const noteEventDescription = document.getElementById('noteEventDescription');
          let calendarDateClicked = null;


          //Add Note/Event Form that opens when the user clicks a date
          function openModal(noteEventDate)
          {
              //Assigns the date the user clicked to the note event date
              calendarDateClicked = noteEventDate;
            
              //Goes through an array and mathces the date the user clicked so that it can print the newly create note/event to that date
              const noteEventDay = noteEvents.find(e => e.noteEventDate === calendarDateClicked);
            
              //If else statement that displays the new note/event text if there is a note found on the date the user clicked
              if (noteEventDay)
              {
                document.getElementById('createdNoteEventText').innerText = noteEventDay.description;
              } else {
                newNoteEvent.style.display = 'block';
              }
            }

          
          //Deals with the buttons in the form
          function loadAddNewNoteEventButtons()
          {
              //If the nextMonthButton is clicked then the function adds the month and loads the next month
              document.getElementById('nextMonthButton').addEventListener('click', () => {
                monthNumber++;
                load();
              });


              //If the previousMonthButton is clicked then the function subtracts the month and loads the previous month
              document.getElementById('previousMonthButton').addEventListener('click', () => {
                monthNumber--;
                load();
              });

              //Listens for the user to click the Add New Student Note/Event Form Buttons like add, close, and delete buttons
              document.getElementById('addNoteEventButton').addEventListener('click', addNewNoteOrEvent);
              document.getElementById('closeNoteEventButton').addEventListener('click', closeModal);
              document.getElementById('deleteNoteEventButton').addEventListener('click', deleteEvent);
              document.getElementById('closeNoteEventButton').addEventListener('click', closeModal);
          }


          //Function that finds and handles the exact days, months, years in the calendar as well as loads all of the calendar days, year, and more onto the html student calendar
          function load()
          {
            
            const dateMonthYearForCalendar = new Date();

            //If statemnt that fetches the month number and if it finds one it grabs the exact month and date
            if (monthNumber !== 0) {
              dateMonthYearForCalendar.setMonth(new Date().getMonth() + monthNumber);
            }

            //Global variables that fetches the users current date, month, year, the first day of the month, and the # of days in a month 
            const day = dateMonthYearForCalendar.getDate();
            const month = dateMonthYearForCalendar.getMonth();
            const year = dateMonthYearForCalendar.getFullYear();
            const findNumberOfDaysInMonth = new Date(year, month + 1, 0).getDate();
            const findThe1stDayOfMonth = new Date(year, month, 1);
            
            //Initializes a combination of variables that includes the weekday, year, month, and day and assigns them with a numeric or long value
            const calendarDatesCreation = findThe1stDayOfMonth.toLocaleDateString('en-us', {
              weekday: 'long',
              year: 'numeric',
              month: 'numeric',
              day: 'numeric',
            });

            const createCalendarDayBoxes = daysOfWeek.indexOf(calendarDatesCreation.split(', ')[0]);

            //Grabs the determined current month and year and displays the current month and year
            document.getElementById('month').innerText = `${dateMonthYearForCalendar.toLocaleDateString('en-us', { month: 'long' })} ${year}`;
            dayBoxes.innerHTML = '';

            //For loop that collects the exact days of the month and year and creates calendar day boxes with the exact number of days in that month and year 
            for(let i = 1; i <= createCalendarDayBoxes + findNumberOfDaysInMonth; i++) {
              const calendarDayBoxCreation = document.createElement('div');
              calendarDayBoxCreation.classList.add('calendarDays');
              const determineDayMonthYear = `${month + 1}/${i - createCalendarDayBoxes}/${year}`;

              //Nested if statements that check the number of days in the month and only prints those days, if statement that finds the users current day in that month and highlights it black, and then finally if statement that finds the date the user clicked and prints the form information into that date on the calendar
              if (i > createCalendarDayBoxes) {
                calendarDayBoxCreation.innerText = i - createCalendarDayBoxes;
                const userCreatedNote = noteEvents.find(e => e.calDate === determineDayMonthYear);

                if (i - createCalendarDayBoxes === day && monthNumber === 0) {
                  calendarDayBoxCreation.id = 'currentDay';
                }

                if (userCreatedNote) {
                  const userNoteDayOfWeek = document.createElement('div');
                  userNoteDayOfWeek.classList.add('calendarNoteEvent');
                  userNoteDayOfWeek.innerText = userCreatedNote.description;
                  calendarDayBoxCreation.appendChild(userNoteDayOfWeek);
                }
                calendarDayBoxCreation.addEventListener('click', () => openModal(determineDayMonthYear));
              }
              dayBoxes.appendChild(calendarDayBoxCreation);
            }
          }

          //If close note/event button is clicked close the form
          function closeModal()
          {
            noteEventDescription.value = '';
            deleteNoteEvent.style.display = 'none';
            newNoteEvent.style.display = 'none';
            calendarDateClicked = null;
            load();
          }

          //Function calls that loads the created calendar and form buttons
          loadAddNewNoteEventButtons();
          load();
      </script>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
<footer id="footer">
        <p> While using Bulletin, you agree to have read and accepted our terms of use, cookie and privacy policy.<br>
            Copyright 2022-2023 by IDM Industries. All Rights Reserved.<br>
            Bulletin is Powered by IDM Industries.</p>
    </footer>
</html>
<style>

body {
    margin: 0;
    background: #232526;
    background: -webkit-linear-gradient(to right, #414345, #232526);
    background: linear-gradient(to right, #414345, #232526);
    padding: 0;
    overflow-x: hidden;
    height: 100%;
}

#headerButtons {
    justify-content: space-between;
    color: white;
    font-size: 26px;
    font-family: 'Open Sans', sans-serif;
    display:flex;
    margin-top: 40px;
    padding: 10px;
  }

.previousMonth{
    margin-top: 30px;
    background-color:black;
    margin-left: 50px;
    font-family: 'Open Sans', sans-serif;
  }

  .nextMonth{
    margin-top: 30px;
    background-color:black;
    margin-left: 0px;
    font-family: 'Open Sans', sans-serif;
  }

  #dayBoxes{
    font-family: 'Open Sans', sans-serif;
    display: flex;
    margin-left: -20px;
    padding-top:30px;
    padding-bottom: 30px;
    padding-left: 38px;
    padding-right: 30px;
    gap: 20px 32px;
    border-style: groove;
    flex-wrap: wrap;
    width: 102%;
    border-color: 4px solid white;
    border-right: -250px;
    border-radius: 8px;
  }


  .calendarNoteEvent {
    font-size: 10px;
    padding: 3px;
    border-radius: 8px;
    max-height: 75px;
    border: 1px solid white;
    background-color: black;
    overflow: hidden;
    text-align: center;
    color: white;
  }


main
{
    animation: fade-in-move-down 1.2s;
}

@keyframes fade-in-move-down
{
  0%
  {
    opacity: 0;
    transform: translateY(-3rem);
  }
  100%
  {
    opacity: 1;
    transform: translateY(0);
  }
}


.calendarDays {
    font-family: 'Open Sans', sans-serif;;
    width: 120px;
    padding: 10px;
    height: 100px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    background-color: #232526;
    margin: 5px;
    border: 1px solid white;
    justify-content: space-between;
    text-align: right;
    box-sizing: border-box;
    border-radius: 8px;
    color: white;
  }


button {
    width: 155px;
    outline: none;
    cursor: pointer;
    padding: 5px;
    border-radius: 5px;
    color: white;
    border: 2px solid white;
    background-color: black;
    height: 40px;
    font-family: 'Open Sans', sans-serif;
    
  }

  
#footer
{
    margin: 0;
    padding: 20px;
    background: black;
    position: relative;
    width: 1500px;
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-size: 15px;
    text-align: center;
}


#daysOfWeek {
    width: 100%;
    background-color: #232526;
    border: 1px solid white;
    color: white;
    display: flex;
    border-radius: 8px;
  }

  #daysOfWeek div {
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    padding: 20px;
    width: 100px;
    
  }


#studentCalendar
{
    background-color: black;
    border-radius: 25px;
}

.header-out
{
    margin: 0;
    padding: 35px;
    background: black;
    
  }

.calendarDays + #currentDay {
    background-color: black;
}

.header-out > a
{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 15px;
    height: 80px;
    line-height: 80px;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    color:white;
}


.BulletinLogo
{
    display: inline-block;
    vertical-align: top;
    width: 225px;
    height: 115px;
    margin-right: 45px;
    margin-top: -20px;
}

a.nav-bar::before
{
    content: ''; position: absolute;
    width: 100%;
    height: 3px;
    border-radius: 4px;
    background-color: white;
    bottom: 20px;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
}


a.nav-bar:hover::before
{
    transform-origin: left;
    transform: scaleX(1);
}

.calendarDays:hover {
    background-color: black;
  }
  


 
</style>