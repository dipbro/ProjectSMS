create view  Students_new_view as
SELECT     StudentHasClass.*,Students.StudentName,Students.Email,Students.Contact,Students.AddressId,Students.GuardianName,
           Students.DOB,Students.GenderId,Students.PhotoId,Students.RegisteredDate,Addresses.AddressName,
           Classes.ClassName
           
FROM         StudentHasClass INNER JOIN
                      Students ON StudentHasClass.StudentId = Students.StudentId INNER JOIN
                      Addresses ON Students.AddressId=Addresses.AddressId INNER JOIN
                      Classes ON StudentHasClass.ClassId=Classes.ClassId 
                     
                      