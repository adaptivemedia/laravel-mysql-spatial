# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.


## What is this

This package enabled Mysql to have better support for geospatial functions for Laravel applications. 
It provides a set of functions to work with geospatial data types and perform spatial queries.

## Commands

### Testing
- Run all tests: `composer test`
- Run unit tests: `composer test:unit`
- Run integration tests: `composer test:integration`
- Run single test: `vendor/bin/phpunit --filter TestName`

### Database
- Start MySQL 8.0: `make start_db`
- Start MySQL 5.7: `make start_db V=5.7`
- Start MariaDB: `make start_db_maria`
- Refresh database: `make refresh_db`
- Remove database: `make rm_db`

## Code Style
- Follow Laravel coding standards and PSR-12
- Use type hints and docblocks for methods
- Class names: PascalCase
- Method/variable names: camelCase
- Constants: UPPERCASE_WITH_UNDERSCORES
- Order imports alphabetically and group by namespace
- Use exceptions for error handling (see Exceptions namespace)
- Use dependency injection and avoid static methods
- Write tests for all new functionality
