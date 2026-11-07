# hkm-plugin-school-frontdesk

> Solves **`school.frontdesk`** · namespace **`Plugins\SchoolFrontdesk\`** · on-demand GDA module
> Family: Elimu / school domain

The reception desk: visitor register, pupil pickups with delegates, and incoming mail (courriers).

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolFrontdeskContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `visitors/, pickups/, attendance/courriers_page.php, student_pickup_delegates` |
| Legacy tables | `school_visitors, school_visitor_log, school_visitor_counters, student_pickup_delegates, student_pickup_logs` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.frontdesk"] }
```

```php
$svc = $container->make(\Plugins\SchoolFrontdesk\API\Contracts\SchoolFrontdeskContract::class);
```

## Installing

```bash
hkm plugins enable SchoolFrontdesk <project>
```
