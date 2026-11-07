<?php

declare(strict_types=1);

namespace Plugins\SchoolFrontdesk\API\Contracts;

/**
 * Published contract for `school.frontdesk`.
 *
 * The reception desk: visitor register, pupil pickups with delegates, and incoming mail (courriers).
 *
 * Legacy source : visitors/, pickups/, attendance/courriers_page.php, student_pickup_delegates
 * Legacy tables : school_visitors, school_visitor_log, school_visitor_counters, student_pickup_delegates, student_pickup_logs
 *
 * Consumers declare `"requires": ["school.frontdesk"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolFrontdeskContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
