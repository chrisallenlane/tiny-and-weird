desc "Tests the files for syntax errors and compares their output."
task :test do
    # regenerate the minified file
    `./minify.php ./example-plaintext.php > ./example-minified.php`

    # pass each file through the linter
    puts `php -l ./minify.php`
    puts `php -l ./tiny-and-weird.php`
    puts `php -l ./example-plaintext.php`
    puts `php -l ./example-minified.php`

    # verify that the minified and un-minified files produce the same output
    unminified = `php -f ./example-plaintext.php`
    minified   = `php -f ./example-minified.php`

    if minified.eql? unminified
        puts "Minification successful."
    else
        puts "Minification FAILED."
    end
end
