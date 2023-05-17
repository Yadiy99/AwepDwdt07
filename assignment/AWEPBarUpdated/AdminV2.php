<!DOCTYPE html>
<html>
<head>
    <title>Custom Event Calendar</title>
    <style>
        .calendar {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        td {
            border: 1px solid #ccc;
        }
        .event-form {
            margin-bottom: 20px;
        }
        .event-form input[type="text"], .event-form input[type="submit"] {
            padding: 5px;
        }
        .event-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <h2>Custom Event Calendar</h2>

        <div class="event-form">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="event-date">Date:</label>
                <input type="date" id="event-date" name="event_date" required>
                <label for="event-name">Event:</label>
                <input type="text" id="event-name" name="event_name" required>
                <input type="submit" value="Add Event">
            </form>
        </div>

        <?php
        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $eventDate = $_POST['event_date'];
            $eventName = $_POST['event_name'];

            // Store event in a file (you can modify this to store in a database)
            $eventData = $eventDate . '|' . $eventName . PHP_EOL;
            file_put_contents('events.txt', $eventData, FILE_APPEND);
        }

        // Read events from file
        $events = file('events.txt', FILE_IGNORE_NEW_LINES);

        // Create a multidimensional array to store events by date
        $eventsByDate = [];
        foreach ($events as $event) {
            list($date, $name) = explode('|', $event);
            $eventsByDate[$date][] = $name;
        }

        // Generate calendar HTML
        $currentYear = date('Y');
        $currentMonth = date('m');

        echo '<table>';
        echo '<tr>';
        echo '<th>Mon</th>';
        echo '<th>Tue</th>';
        echo '<th>Wed</th>';
        echo '<th>Thu</th>';
        echo '<th>Fri</th>';
        echo '<th>Sat</th>';
        echo '<th>Sun</th>';
        echo '</tr>';

        $firstDayOfMonth = strtotime("first day of $currentYear-$currentMonth");
        $daysInMonth = date('t', $firstDayOfMonth);
        $dayOfWeek = date('N', $firstDayOfMonth);

        echo '<tr>';

        // Output empty cells for days before the month starts
        for ($i = 1; $i < $dayOfWeek; $i++) {
            echo '<td></td>';
        }

        // Output cells for each day of the month
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = date('Y-m-d', strtotime("$currentYear-$currentMonth-$day"));
        
            echo '<td>';
            echo $day;
    
            // Check if there are events for this date
            if (isset($eventsByDate[$date])) {
                echo '<ul>';
                foreach ($eventsByDate[$date] as $event) {
                    echo '<li>' . $event . '</li>';
                }
                echo '</ul>';
            }
    
            echo '</td>';
    
            // Start a new row after every 7 cells (week)
            if (($day + $dayOfWeek - 1) % 7 === 0) {
                echo '</tr><tr>';
            }
        }
    
        // Output empty cells for remaining days
        $remainingDays = 7 - (($day + $dayOfWeek - 1) % 7);
        for ($i = 0; $i < $remainingDays; $i++) {
            echo '<td></td>';
        }
    
        echo '</tr>';
        echo '</table>';
    
        ?>
    
        <div class="event-list">
            <h3>Event List</h3>
            <?php
            if (!empty($events)) {
                echo '<ul>';
                foreach ($events as $event) {
                    list($date, $name) = explode('|', $event);
                    echo '<li>' . $date . ': ' . $name . '</li>';
                }
                echo '</ul>';
            } else {
                echo 'No events found.';
            }
            ?>
        </div>
    
    </div>
    
