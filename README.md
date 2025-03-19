# Challenge

Let’s say we have a website and we keep track of what pages customers are viewing, for things like business metrics.

Every time somebody comes to the website, we write a record to a log file consisting of Timestamp, PageId, CustomerId. At the end of the day we have a big log file with many entries in that format. And for every day we have a new file.

Now, given two log files (log file from day 1 and log file from day 2) we want to generate a list of ‘loyal customers’ that meet the criteria of: 

1. they came on both days, and 
1. they visited at least two unique pages.

Example file format:

| Timestamp | PageId | CustomerId
|-----------|--------|-----------
| 2025-03-10T08:15:00|home|123

## What to do?

Modify `main.php` to process `log_day1.log` and `log_day2.log` and output customers that:

1. Visited on both days, and
1. Visited at least two unique pages

## Running the code

### Using PHP

```bash
php main.php
```

### Using Docker

```bash
docker run -v $(pwd)/main.php:/app/main.php php-test
```