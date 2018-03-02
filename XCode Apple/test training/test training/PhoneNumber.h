//
//  PhoneNumber.h
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface PhoneNumber : NSObject
@property (strong, nonatomic) NSString *type;
@property (strong,nonatomic) NSString *phoneNumber;
- (id) initWithType: (NSString*)type andPhoneNumber: (NSString*)phoneNumber;


@end
