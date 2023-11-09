### Adhithya Info Tech Location: Aranthangi
simple ecommerce site.
```sql
SET @latitude = 10.3833;
SET @longitude = 78.8001;

-- Select locations within a 50 km radius
SELECT 
    name, 
    lat, 
    `long`,
    (6371 * ACOS(COS(RADIANS(@latitude)) * COS(RADIANS(lat)) * COS(RADIANS(`long`) - RADIANS(@longitude)) + SIN(RADIANS(@latitude)) * SIN(RADIANS(lat)))) AS distance
FROM locations
HAVING distance < 2
ORDER BY distance;
```
