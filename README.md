ITRACKB4 - LA12

H1: The top of your error page named a file inside vendor. Say why that was not where your mistake was, and where the page showed you it actually was.
-The vendor file was just where Laravel caught the error (it stopped working there), but the actual mistake was in my own code. The page showed me the exact file and line in the "Exception trace" section by opening the app/Http/Controllers/MovieController.php frame, which pointed to my typo.

H2: You wrote one Log::info line with a context array. Name something it will tell you next month that the error page could not.
-The context array tells me the specific ID of the movie that was saved. Without it, the log would just say "Movie saved" and I wouldn't know which one it was. Next month, I can look back and know exactly which record caused the log.

H3: Your guard answers with 403 instead of redirecting back with a message. Say when each of the two is the better answer.
-A 403 is better when the user is trying to do something they are absolutely not allowed to do, like accessing an admin area. A redirect with a message is better for normal users who made a reasonable mistake, like trying to delete a record that is currently in use, so they don't see a scary error page.


