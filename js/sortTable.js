//Compares the totals in the global leaderboard table and swaps them
// if one total is smaller than the other
// Allowing the smaller totals to go to the bottom
// The higher totals at the top

//TLDR sorts total in descending order


function sortTableByTotal() {
    var table,
    rows,
    swapping,
    rowX, rowY,
    shouldswap;

    table = document.getElementById("globalTable");
    swapping = true;

    while (swapping) {
        //Set swapping to false initially
        swapping = false;

        //Get all rows in the table
        rows = table.rows;

        //Loop through every row except the 1st, which contains row headings
        for (i = 1; i < (rows.length - 1); i++) {
            //Set shouldSwap to false initially
            shouldswap = false;

            //Get current row, and row after current row element
            //Which we want to compare
            rowX = rows[i].getElementsByTagName("TD")[6];
            rowY = rows[i + 1].getElementsByTagName("TD")[6];

            //Check if current row is less than the next row
            if (Number(rowX.innerHTML) < Number(rowY.innerHTML)) {
                //The rows should swap
                shouldswap = true;
                //Exit loop
                break;
            }
        }
        if (shouldswap) {
            //Swap the rows around
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            //Set swapping to true so the while loop can run again
            swapping = true;
        }
    }
}